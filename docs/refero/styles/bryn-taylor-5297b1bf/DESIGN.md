# Bryn Taylor — Refero Style

- Refero URL: https://styles.refero.design/style/5297b1bf-5001-4421-83ca-cc327877c858
- Site URL: https://www.bryntaylor.co.uk
- ID: 5297b1bf-5001-4421-83ca-cc327877c858
- Theme: light
- Industry: design
- Created: 2026-04-30T03:37:31.267Z
- Ranks: newest: 109, popular: 1147, trending: 1176

> Architectural blueprint on white marble.

## Description

Bryn Taylor's design system is a monochrome, content-first experience, akin to a meticulous architect's portfolio. Its character emerges from sharp typographic forms against subtle, almost imperceptible greys. Interactivity is defined by a deep ink-black paired with crisp white, creating a high-contrast focal point for user actions. The visual system prioritizes clarity and directness, using minimal adornment and robust typography to convey expertise.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, headings, button backgrounds, outline borders for ghost components, active state indicators. It signifies action and primary information |
| Canvas White | #eff0fc | neutral | Main page background, providing a clean, almost off-white canvas for content |
| Surface Frost | #ffffff | neutral | Card backgrounds, input fills, and text on Midnight Ink backgrounds. It serves as a secondary background and prominent foreground text color |
| Muted Ash | #575757 | neutral | Secondary text, weaker borders, and subtle descriptive elements |
| Ghost Tint | #0000000a | neutral | Subtle background for ghost button hovers and soft dividers |
| Faint Grey | #00000014 | neutral | Lighter borders, very subtle surface tint for background elements |
| Line Grey | #0000001f | neutral | Hairline borders and separators, slightly stronger than Faint Grey |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal | Inter | 400, 500 | 12px, 14px, 15px, 16px, 17px, 18px, 20px, 24px, 28px, 30px, 56px, 80px | 1.05, 1.10, 1.20, 1.35, 1.40, 1.50, 1.60, 1.63 | The sole typeface, Neue Montreal, carries the entire visual voice. Its clean, geometric forms provide a confident, no-nonsense readability for all content, from large commanding headlines to detailed body text. The tight line heights, especially for larger sizes, reinforce a compact and efficient presentation. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.001 |
| body-sm | 14 | 1.6 | 0.001 |
| body | 16 | 1.6 | 0.006 |
| subheading | 24 | 1.35 | 0.015 |
| heading | 30 | 1.2 | 0.015 |
| heading-lg | 56 | 1.1 | 0.025 |
| display | 80 | 1.05 | 0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px",
    "badge": "12px",
    "cards": "12px",
    "small": "8px",
    "buttons": "1.67772e+07px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Call to action button for primary actions.

Background: Midnight Ink (#000000). Text: Surface Frost (#ffffff). Border radius: 1.67772e+07px (pill shape). Padding: 0px vertical, 18px horizontal. Uses Neue Montreal.

### Ghost Secondary Button

**Role:** Secondary action button, providing a subtle interactive element.

Background: Ghost Tint (#0000000a), Text: Midnight Ink (#000000). Border radius: 1.67772e+07px (pill shape). Padding: 0px vertical, 18px horizontal. Uses Neue Montreal.

### Card, Accent Background

**Role:** Background for feature blocks or highlighted content sections.

Background: Faint Grey (#00000014). Border radius: 12px. No shadow. No intrinsic padding.

### Card, White Background

**Role:** Standard content card, used within sections.

Background: Surface Frost (#ffffff). Border radius: 12px. No shadow. No intrinsic padding.

### Input Field

**Role:** Text input areas for forms.

Background: Surface Frost (#ffffff). Text: Midnight Ink (#000000). Border: 1px solid Faint Grey (#00000014). Border radius: 12px. Padding: 0px vertical, 23px horizontal. Uses Neue Montreal.

### Badge

**Role:** Small informational tags or labels.

Background: Surface Frost (#ffffff). Text: Midnight Ink (#000000). Border radius: 12px. Padding: 5.6px vertical, 12px horizontal. Uses Neue Montreal.

### Menu Item Highlight

**Role:** Indicator for active navigation items.

Inset shadow: rgba(0, 0, 0, 0.08) 0px -2px 0px 0px. This creates a subtle bottom border for active navigation links.

## Do's

- Prioritize Neue Montreal for all text content; do not introduce other typefaces.
- Utilize Midnight Ink (#000000) for all primary text, headings, and active elements to maintain strong contrast.
- Apply Canvas White (#eff0fc) as the default background for most content sections.
- Use pill-shaped radii (1.67772e+07px) for all primary and secondary buttons, and 12px for cards and badges.
- Maintain a comfortable density with element gaps of 16px and section gaps of 32px between major content blocks.
- Employ the subtle inset shadow `rgba(0, 0, 0, 0.08) 0px -2px 0px 0px` for active navigation items.
- Introduce Surface Frost (#ffffff) as background for interactive components like inputs and cards, providing a hierarchical distinction from Canvas White.

## Don'ts

- Avoid using highly saturated colors; the palette is almost entirely achromatic with subtle tints.
- Do not deviate from the specified 'Neue Montreal' typeface, weights, and letter-spacing values.
- Do not use heavy box shadows; elevation is primarily achieved through subtle background color changes or faint inset shadows.
- Avoid large hero imagery; the layout prioritizes text and clean UI elements.
- Do not introduce complex gradient fills; the system relies on solid colors and subtle color differences for depth.
- Do not use generic border radii; adhere to 1.67772e+07px for buttons and 12px for cards/badges.
- Do not use different fonts for headings and body text; the same family with varying sizes and weights is the established pattern.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochromatic interface with a strong focus on minimalist typography and high-contrast interactive elements. |
| Stripe | Clean, spacious layouts, strong typographic hierarchy, and limited color palette to highlight product features. |
| Superhuman | Emphasis on efficiency, clean UI, and using dark grays and blacks for primary actions against a light background. |
| Figma | Interface design with a neutral background, clear component separation, and high-contrast text and action elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #eff0fc
border: #0000001f
accent: no distinct accent color
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a primary navigation button: Background Midnight Ink (#000000), text Surface Frost (#ffffff), pill radius (1.67772e+07px), 18px horizontal padding. Font Neue Montreal 16px, weight 500.
2. Design a feature card: Background Faint Grey (#00000014), 12px border radius, no shadow. Headline Neue Montreal 24px, weight 500, Midnight Ink (#000000). Body text Neue Montreal 16px, weight 400, Muted Ash (#575757). Padding 24px.
3. Create a testimonial section: Background Canvas White (#eff0fc). Testimonial block has background Surface Frost (#ffffff), 12px border radius. Quote text Neue Montreal 18px, weight 400, Midnight Ink (#000000). Author text Neue Montreal 14px, weight 500, Midnight Ink (#000000). Element gap 16px.
4. Design a ghost button: Background Ghost Tint (#0000000a), text Midnight Ink (#000000), pill radius (1.67772e+07px), 18px horizontal padding. Font Neue Montreal 16px, weight 500.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520231922-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520231922-thumb.jpg |
