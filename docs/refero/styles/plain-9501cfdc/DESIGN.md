# Plain — Refero Style

- Refero URL: https://styles.refero.design/style/9501cfdc-3eb3-4b64-90f6-9afdded48945
- Site URL: https://plain.com
- ID: 9501cfdc-3eb3-4b64-90f6-9afdded48945
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:45:19.657Z
- Ranks: newest: 709, popular: 453, trending: 291

> Crisp digital workbench

## Description

Plain's design system evokes a digital workbench aesthetic: a clean white canvas overlaid with distinct, slightly textured surfaces. The typography is precise and functional, favoring mono-spaced and geometric sans-serifs. A single vibrant green serves as the primary accent, activating interactive elements and key information against an otherwise subdued, near-monochromatic palette. Components are lightweight with subtle shadow work, emphasizing information over heavy ornamentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page background, modal backgrounds, and pristine content areas. Serves as the base for all UI elements |
| Ghost Fog | #f3fbe9 | neutral | Subtle background for informational sections and secondary content blocks, providing a soft lift from the pure white canvas. Also used for outlined button backgrounds |
| Vanilla Cream | #f9f6f1 | neutral | Background for cards and elevated components, offering a slightly warmer off-white tone than the main canvas |
| Ash Graphite | #0a2414 | neutral | Primary text color for headings and body copy. Also used for borders around text elements and some icon fills |
| Deep Forest | #283a2e | neutral | Background for specific card variants, providing a dark, grounded alternative to the lighter card surfaces |
| Sage Green | #607166 | neutral | Muted text for secondary information, subheadings, and soft outlines, providing a hint of color while remaining neutral |
| System Black | #000000 | neutral | Used for hard borders, lines, and some icon details to create sharp distinctions and visual structure |
| Plain Green | #1ad379 | brand | Primary brand accent. Used for filled call-to-action buttons, active states, key links, and decorative elements |
| Plain Green Muted | #17b267 | brand | A slightly darker, more subdued version of Plain Green, appearing in text links and as a border for ghost buttons, maintaining brand consistency with less visual intensity |
| Alert Red | #360003 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Warm Pink | #ffbac3 | accent | Accent for specific text highlights or border elements, providing a subtle, warm contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| ABC Favorit | Inter | 400, 500 | 13px, 15px, 18px, 24px, 48px, 80px | 0.95 (display), 1.00 (headings), 1.17 (subheadings), 1.33 (body), 1.46 (body) | Primary brand typeface for headings, body text, and key UI elements. Its geometric sans-serif nature provides a modern, crisp, and highly readable foundation. |
| Geist Mono | JetBrains Mono | 500 | 13px | 1.46 | Used for code snippets, timestamps, secondary navigation, and functional labels where precise character alignment and a technical feel are desired. The specific font features enhance its unique character. |
| system-ui |  | 400 |  | 1.20 | A fallback or utility font for small interface elements, ensuring broad compatibility and system-level performance. Often seen in metadata, tags, and incidental text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body | 15 | 1.33 |  |
| subheading | 18 | 1.17 | -0.18 |
| heading | 24 | 1.17 | -0.24 |
| heading-lg | 48 | 1.04 | -0.96 |
| display | 80 | 0.95 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "9px",
    "buttons": "6px",
    "general": "6px"
  },
  "elementGap": "24px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action

Solid filled button with Plain Green background (#1ad379) and Ash Graphite text (#0a2414). Border-radius of 6px, with 8px vertical and 10px horizontal padding. Prominently guides user action.

### Outlined Accent Button

**Role:** Secondary action button

Outline button with Ghost Fog background (#f3fbe9), Plain Green text (#1ad379), and Plain Green border. Border-radius 6px, with 5px vertical and 10px (variable) horizontal padding. Offers a less dominant interactive element.

### Light Content Card

**Role:** Neutral information container

Card with Vanilla Cream background (#f9f6f1) and 9px border-radius. No box-shadow. Padding defaults to 24px internally. Used for grouping related content.

### Dark Themed Card

**Role:** Emphasized or themed content container

Card with Deep Forest background (#283a2e) and 9px border-radius. No box-shadow. Padding is generous at 40px, creating a rich content block.

### Alert Card

**Role:** Indicator for critical or urgent information

Card with Alert Red background (#360003) and 9px border-radius. No box-shadow. Contains specific content that needs to stand out, with 24px padding.

### Text Link Active

**Role:** Interactive text link

Text in Plain Green Muted (#17b267) within body copy. Often used for navigation or inline references.

### Ghost Navigation Button

**Role:** Top navigation item

Text in Ash Graphite (#0a2414) on transparent background. Used in the header, indicating navigatable sections without strong visual emphasis until hovered/active.

## Do's

- Use ABC Favorit for all primary text content. Opt for weight 400 for body and 500 for headlines to establish clear hierarchy.
- Apply Plain Green (#1ad379) strictly for primary calls to action, active states, and small, functional brand accents.
- Maintain a clear visual hierarchy using the surface progression: Canvas White (#ffffff) as base, Ghost Fog (#f3fbe9) for secondary blocks, and Vanilla Cream (#f9f6f1) for cards.
- Ensure all buttons and interactive elements utilize a 6px border-radius for a consistent, subtle rounding.
- Implement 24px as the standard element gap for moderate spacing between distinct UI components.
- Use Geist Mono (#13px, weight 500) for all code snippets, timestamps, and interface labels requiring a technical, structured feel, applying specialized font features 'ss02' and 'ss06'.
- Employ System Black (#000000) for hard lines and borders to create sharp, deliberate divisions and structure without relying on heavy shadows.

## Don'ts

- Do not introduce new saturated accent colors outside of Plain Green; rely on the established brand green for all chromatic interactions.
- Avoid heavy box-shadows or complex elevation styles; prefer clean, flat surfaces or subtle background color changes for depth.
- Do not use generic system fonts for prominent headings or body copy; ABC Favorit and Geist Mono are essential to the brand's typographic identity.
- Do not deviate from the specified border-radii of 6px for interactive elements and 9px for cards; inconsistent rounding undermines the visual precision.
- Do not use color for purely decorative purposes, apply it functionally to highlight interactions, status, or brand identity.
- Avoid wide, full-bleed content sections; maintain a comfortable maximum content width and centered layout for readability.
- Do not overuse bold weights in text; the system relies on subtle weight shifts and specific font choices to convey hierarchy and distinction.

## Layout

The page operates on a contained width model with no explicit maximum width detected, suggesting a fluid-responsive approach that favors readability within a comfortable range. The hero section prominently features a centered headline over a white background, immediately followed by the main call-to-action buttons. Content sections typically flow with consistent vertical spacing (defaulting to 40px), alternating between text-heavy blocks and product screenshots often presented as centered elements or within cards. Navigation is a sticky top bar with ghost buttons and distinct accent buttons for calls to action.

## Imagery

The site predominantly uses product screenshots and abstract, data-driven visualizations to explain concepts. Photography is minimal, appearing as contained, often masked elements that avoid full-bleed or overlapping treatments. Icons are outlined, lightweight, and mono-color, typically using Ash Graphite or Plain Green, serving as functional indicators rather than decorative elements. The overall density of imagery is balanced, visually supporting text-dominant sections without overwhelming them.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Shares a crisp, minimalist white background with precise typography and a single vibrant accent color for interaction. |
| Stripe | Exhibits a similar clean, functional aesthetic with a focus on clear information hierarchy and well-defined UI components. |
| Vercel | Utilizes a highly structured layout, refined typography (including mono-spaced elements), and a restrained color palette with strategic accents. |
| Notion | Employs a content-focused design with a clean white canvas, emphasis on readability, and functional, uncluttered UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a2414
background: #ffffff
border: #000000
accent: #1ad379
primary action: #1ad379 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #1ad379 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Light Content Card: Vanilla Cream background (#f9f6f1), 9px border-radius, 24px internal padding. Inside, use a subheading 'Card Title' (ABC Favorit, weight 500, size 24px, #0a2414) and body text 'Card content goes here.' (ABC Favorit, weight 400, size 15px, #0a2414).
3. Create a Dark Themed Card: Deep Forest background (#283a2e), 9px border-radius, 40px internal padding. Inside, use a heading 'Feature Highlight' (ABC Favorit, weight 500, size 48px, #ffffff) and body text 'Detailed description of the feature.' (ABC Favorit, weight 400, size 18px, #f3fbe9).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509887009-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509887009-thumb.jpg |
