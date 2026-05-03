# Wellfound — Refero Style

- Refero URL: https://styles.refero.design/style/f8286b32-cc41-43e3-8b43-067333bb2e32
- Site URL: https://wellfound.com
- ID: f8286b32-cc41-43e3-8b43-067333bb2e32
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:52:33.721Z
- Ranks: newest: 676, popular: 863, trending: 803

> Startup Canvas, Clean Bold Type

## Description

Wellfound projects a functional, modern job market feel with a dominant light theme punctuated by dark, almost black, sections for emphasis. The design emphasizes clear navigation and content presentation using a structured layout and a clean typographic hierarchy. Subtle touches of vibrant accent colors are used sparingly to highlight interactive elements and brand identity, rather than for decorative flourishes. Components are generally lightweight, favoring soft borders over heavy shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds |
| Midnight Ink | #051316 | neutral | Primary text, main CTA backgrounds, dark card surfaces, navigation text |
| Smoke Gray | #d8d8d8 | neutral | Muted borders, inactive button borders, hero element borders |
| Charcoal | #333333 | neutral | Secondary text, link text, image border details |
| Off-Black | #222222 | neutral | Navigation text in dark sections |
| Deep Plum | #210d25 | brand | Dark section backgrounds, decorative icon fills |
| Rose Blush | #fff4f6 | accent | Soft accent card backgrounds, subtle background washes |
| Vermillion Red | #ec2e3a | accent | Red outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Burgundy Bloom | #541142 | brand | Decorative link backgrounds for specific content blocks |
| Marigold Gold | #f4b640 | accent | Specific link backgrounds, decorative accents |
| Fiery Orange | #e32e19 | accent | Orange outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Peach Fuzz | #ffdfda | accent | Subtle background tones, light decorative elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Graphik | Inter | 400, 500, 600 | 14px, 16px, 17px, 21px, 22px, 24px, 30px, 40px, 72px, 100px | 0.82, 1.00, 1.13, 1.14, 1.27, 1.30, 1.36, 1.40, 1.43, 1.50, 1.71 | Primary typeface for all headings, body text, and UI elements. Its strong, geometric character provides a confident, direct voice. The wide range of weights supports extensive hierarchy. |
| Aeonik Fono | Space Mono | 400, 700 | 14px | 1.40 | Used for specific button text and decorative headings, providing a distinct geometric feel compared to Graphik. |
| Aeonikfono |  | 400, 700 | 40px | 1.3 | Aeonikfono — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 | 0 |
| body-sm | 16 | 1.4 | 0 |
| subheading | 21 | 1.36 | 0 |
| heading | 30 | 1.3 | -0.39 |
| heading-lg | 40 | 1.13 | -0.64 |
| display | 72 | 1 | -1.44 |
| display-lg | 100 | 0.82 | -2 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "1000px",
    "cards": "16px",
    "buttons": "12px",
    "largeElements": "40px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "22px",
  "pageMaxWidth": "1400px"
}
```

## Components

### Primary Filled Button (Dark)

**Role:** Call to action button for primary actions.

Background: Midnight Ink (#051316). Text: Canvas White (#ffffff). Radius: 12px. Padding: 8px vertical, 24px horizontal. Border: none.

### Ghost Button (Light Border)

**Role:** Secondary action or navigational buttons, visually lighter.

Background: transparent. Text: Canvas White (#ffffff). Border: 1px solid rgba(255, 255, 255, 0.25). Radius: 12px. Padding: 14px vertical, 24px horizontal.

### Ghost Button (Dark Border)

**Role:** Secondary action button on light backgrounds.

Background: Canvas White (#ffffff). Text: Midnight Ink (#051316). Border: 1px solid Smoke Gray (#d8d8d8). Radius: 12px. Padding: 14px vertical, 24px horizontal.

### Feature Card (Rose Blush)

**Role:** Used for presenting key features or benefits.

Background: Rose Blush (#fff4f6). Radius: 16px. Padding: 40px. No box-shadow.

### Information Card (White)

**Role:** Standard card for content blocks and lists.

Background: Canvas White (#ffffff). Radius: 16px. Padding: 40px. No box-shadow.

### Job Tag Button

**Role:** Interactive tags for filtering or categorization.

Background: Canvas White (#ffffff). Text: Midnight Ink (#051316). Border: 1px solid Smoke Gray (#d8d8d8). Radius: 1000px (pill shape). Padding: 14px vertical, 24px horizontal. Has a soft shadow on interaction.

### Log In Button (Header)

**Role:** Navigation button for user authentication.

Background: Canvas White (#ffffff). Text: Midnight Ink (#051316). Border: 1px solid Smoke Gray (#d8d8d8). Radius: 12px. Padding: 14px vertical, 24px horizontal.

## Do's

- Prioritize Midnight Ink (#051316) for primary text and main calls to action on light backgrounds, ensuring strong contrast.
- Use a 12px border-radius for interactive elements like buttons and navigation items for a consistent rounded aesthetic.
- Apply Rose Blush (#fff4f6) as a subtle background for feature cards to differentiate them from the main Canvas White (#ffffff) surface.
- Maintain generous padding; apply at least 20px padding around content within cards and elements, and a 40px section gap between major content blocks.
- Employ the Graphik typeface for all text elements, utilizing its multiple weights to establish clear typographic hierarchy.
- Use pill-shaped tags with a 1000px border-radius for interactive filters and categorizations, styled with Canvas White (#ffffff) background and Smoke Gray (#d8d8d8) border.
- Introduce a subtle shadow (rgba(0, 0, 0, 0.06) 0px 9px 20px 0px) on interactive elements like buttons to indicate hover or active states.

## Don'ts

- Avoid using multiple accent colors in close proximity; restrict their use to single highlights or functional elements.
- Do not extend Deep Plum (#210d25) to text or borders; reserve it exclusively for background sections or large decorative elements.
- Prevent excessive use of borders; use them sparingly for separation or interactive states rather than for all container elements.
- Do not deviate from the established type scale; maintain consistent font sizes and line heights defined for each semantic role.
- Avoid decorative gradients for UI elements; keep a flat aesthetic with solid colors for all buttons and panels.
- Do not introduce new shadow styles; adhere to the specified button shadow or refrain from using additional shadows.

## Layout

The page primarily follows a max-width contained model (1400px), centered on the screen. The hero section features a prominent, centered headline with interactive tags over a large, dynamically generated background. Sections alternate between Canvas White (#ffffff) and Deep Plum (#210d25) backgrounds for visual rhythm. Content is arranged in either centered stacks or symmetrical two-column text-left/image-right configurations for feature explanations. Navigation consists of a sticky top bar with 'Log In' and 'Sign Up' buttons, and sub-navigation with compact links. Overall density is comfortable, with ample breathing room between elements and sections.

## Imagery

The site uses minimal imagery, primarily focusing on UI and typographic presentation. When present, images are tightly cropped product shots or abstract, illustrative icons rather than photography. Icons are generally outlined, matching the lightweight UI aesthetic. The overall density is text-dominant, with imagery serving as functional complements rather than decorative elements. Abstract graphics like the 'Find what's next' dotted outline are simple, linear, and serve to highlight key phrases.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Both use a minimalist light-on-dark/dark-on-light aesthetic with clean typography and strong structural lines, prioritizing UI over heavy graphics. |
| Supabase | Similar bold, geometric heading typography and use of dark background sections to punctuate content in an otherwise light-themed site. |
| Vercel | Shares a preference for a clean, developer-tool aesthetic with sophisticated typography and a focus on content hierarchy through restrained use of color. |
| Figma | Employs an interaction-focused UI, using subtle borders and shadows for components and a clear, functional color palette to guide user flow. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #051316
background: #ffffff
border: #d8d8d8
accent: #fff4f6
primary action: #051316 (filled action)

Example Component Prompts:
1. Create a Primary Filled Button: background #051316, text #ffffff, radius 12px, padding 8px vertical 24px horizontal, text in Graphik weight 600, size 16px.
2. Create a Feature Card: background #fff4f6, radius 16px, padding 40px, no shadow. Inside, include a heading (Graphik weight 600, size 24px, #051316) and body text (Graphik weight 400, size 17px, #333333).
3. Create a Job Tag Button: background #ffffff, text #051316, border 1px solid #d8d8d8, radius 1000px, padding 14px vertical 24px horizontal, text in Graphik weight 400, size 14px.
4. Design a dark content section: background #210d25, padding 40px vertical. Display a heading (Graphik weight 500, size 72px, #ffffff) and a secondary ghost button (transparent background, #ffffff text, 1px solid rgba(255, 255, 255, 0.25) border, 12px radius, 14px vertical 24px horizontal padding).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510320117-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510320117-thumb.jpg |
