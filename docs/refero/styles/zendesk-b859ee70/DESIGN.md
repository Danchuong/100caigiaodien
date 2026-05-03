# Zendesk — Refero Style

- Refero URL: https://styles.refero.design/style/b859ee70-863e-44c6-ab5c-f8cdb404c570
- Site URL: https://thankyoumachine.zendesk.com
- ID: b859ee70-863e-44c6-ab5c-f8cdb404c570
- Theme: light
- Industry: saas
- Created: 2026-04-30T03:45:05.345Z
- Ranks: newest: 77, popular: 224, trending: 142

> Crisp digital canvas

## Description

Zendesk employs a crisp, bright aesthetic with high contrast typography and a single vibrant accent color. The visual system prioritizes legibility and direct communication on a clean white canvas, grounded by dark, information-dense footers. Components are lightweight and functional, using subtle rounding and a clear hierarchy driven by size and color. Interaction points are sharply defined by the key accent green, making actions feel clear and responsive.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated surfaces, default icon fills, default link text in dark sections |
| Ink Black | #000000 | neutral | Primary text, deep shadow effects where present |
| Charcoal | #11110d | neutral | Footer background, secondary text on light backgrounds, dark surface elements |
| Fog Gray | #f5f5f2 | neutral | Muted text, subtle borders, background for secondary headings |
| Zendesk Green | #d1f470 | brand | Primary call-to-action buttons, interactive links, highlight accents, decorative branding element in footer |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Vanilla Sans | Inter, sans-serif | 400, 500, 600, 700 | 14px, 16px, 18px, 32px, 42px, 68px | 1.00, 1.05, 1.15, 1.20, 1.39, 1.40, 1.44, 1.45, 1.50, 1.56, 1.68 | The primary typeface for all text content, from headings to body text and navigation. Its clean, modern lines reinforce the system's clarity and directness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 |  |
| body-sm | 16 | 1.5 |  |
| body | 18 | 1.5 |  |
| heading-sm | 32 | 1.2 |  |
| heading | 42 | 1.05 |  |
| display | 68 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "4px",
    "buttons": "16px",
    "bodySurface": "40px",
    "navigationItems": "16px"
  },
  "elementGap": "16px",
  "sectionGap": "88px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with Zendesk Green (#d1f470) background and Charcoal (#11110d) text. Features 16px border-radius and 10px vertical, 20px horizontal padding. Prominently used for primary actions.

### Ghost Navigation Button

**Role:** Secondary navigation or action

Transparent background with Canvas White (#ffffff) text (when on dark background like footer). No distinct padding, relies on surrounding layout for spacing. Used for navigation links or secondary actions that need less emphasis.

### Info Banner

**Role:** Top-level informational message

Dark Charcoal (#11110d) background with Canvas White (#ffffff) text. Used for system-wide notices at the top of the page. Minimal padding, directly integrated into the header structure.

### Footer Link

**Role:** Navigation links within the footer

Canvas White (#ffffff) text on Charcoal (#11110d) background. Default state is simple text, interactive states or special links may use Zendesk Green (#d1f470) text. Small 4px border-radius for interactive elements.

### Muted Heading

**Role:** Secondary section headings

Text in Fog Gray (#f5f5f2) color, often used in information-dense sections like the footer. Sizes range based on hierarchy, e.g. 18px / 1.5.

## Do's

- Use Canvas White (#ffffff) for primary page backgrounds, ensuring maximum legibility for content.
- Apply Zendesk Green (#d1f470) exclusively for primary calls-to-action, interactive elements, and focused brand highlights.
- Employ Charcoal (#11110d) as the background for footer sections and high-contrast informational banners.
- Use Vanilla Sans (or Inter as substitute) for all typographic elements, prioritizing legibility and a consistent brand voice.
- Ensure all buttons and navigation items utilize a 16px border-radius for a consistent, soft visual feel.
- Maintain high contrast (AAA level) for all text against its background, e.g., Ink Black (#000000) on Canvas White (#ffffff).
- Utilize an 8px base unit for all spacing, with common element gaps at 16px and section gaps at 88px for clarity.

## Don'ts

- Do not introduce new vibrant colors outside of Zendesk Green (#d1f470), as it diminishes the impact of the primary accent.
- Avoid heavy shadows or gradients on interactive elements; rely on color and typography changes for states.
- Do not deviate from the established type scale; maintain consistent sizing and line heights for hierarchy.
- Do not use generic system fonts; always specify Vanilla Sans or its substitute Inter.
- Avoid applying tight letter-spacing to body text; it should remain at 'normal' for readability.
- Do not use border-radius values other than 4px or 16px for UI elements, except for the large 40px radius on a specific body surface.
- Do not use more subtle forms of interaction for primary CTAs; they must be filled with Zendesk Green.

## Layout

The page follows a contained layout model, centered within a max-width constraint, though the 'max-width' itself is not explicitly defined in the data, the content is clearly not full-bleed. The hero section features a large, centered headline followed by body text and an engaging call to action. Sections are delineated by clear vertical rhythm with generous spacing. The footer shifts to a dark background, employing a multi-column grid for navigation links and a visually distinct 'Contact us.' section with a brand accent. Page-level navigation is a simple top bar with a logo and two ghost action buttons.

## Imagery

This site predominantly uses icons and UI elements rather than complex imagery. White background with a simple black logo. When present, imagery is typically functional, like a small decorative green gradient in the footer or simple line icons in navigation. The design is text-dominant, with visual elements serving to break up sections or highlight interaction. Icons are minimal, likely filled or solid, with no apparent stroke. No elaborate photography or custom illustrations are present beyond the brand's immediate UI needs.

## Similar Brands

| Business | Why |
| --- | --- |
| monday.com | Bright, high-contrast UI with a strong emphasis on a single accent color for interaction and brand identity. |
| Asana | Clean white background with dark text, precise typography, and strategic use of a distinct brand color for actions and highlights. |
| Notion | Minimalist aesthetic with a focus on typography and clear hierarchy, utilizing a limited color palette with a single accent for functionality. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #d1f470 (for active states/highlights)
accent: #d1f470
primary action: #d1f470 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #d1f470 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a main headline: text #11110d, font Vanilla Sans weight 700, size 68px, lineHeight 1.0.
4. Create a hero body text block: text #11110d, font Vanilla Sans weight 400, size 18px, lineHeight 1.5.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520681204-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520681204-thumb.jpg |
