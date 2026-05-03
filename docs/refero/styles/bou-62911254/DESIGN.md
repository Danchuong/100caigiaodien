# Bou — Refero Style

- Refero URL: https://styles.refero.design/style/62911254-e6a9-4de8-bba1-accfc1a18da5
- Site URL: https://bou.co
- ID: 62911254-e6a9-4de8-bba1-accfc1a18da5
- Theme: light
- Industry: agency
- Created: 2026-04-30T02:31:17.184Z
- Ranks: newest: 355, popular: 1027, trending: 1018

> Crisp canvas, pill buttons.

## Description

Bou employs a crisp, airy aesthetic with clean typography and a strong emphasis on monochrome surfaces. Interactive elements are softened by extreme radii, creating a comfortable, approachable feel despite the stark black and white palette. Subtle background color shifts break up sections, while a singular light-green wash provides a moment of visual pause. The system prioritizes content legibility through high contrast and generous spacing.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Obsidian | #0a0a0a | neutral | Primary text, dark surface backgrounds, button backgrounds for primary actions, subtle borders for interactive elements |
| Canvas | #ffffff | neutral | Page backgrounds, card surfaces, text on dark backgrounds, active navigation item borders |
| Mist | #ebebeb | neutral | Slightly off-white backgrounds for secondary sections, creating subtle visual separation from the main canvas |
| Pewter | #dbd9dc | neutral | Muted navigation text, subtle border accents in navigation |
| Faded Steel | #858585 | neutral | Secondary body text, supporting information with reduced visual hierarchy |
| Soft Jade Wash | #cbecec | accent | Hero background tint, creating a unique visual atmosphere without strong saturation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| mainFont |  | 300, 400, 500, 600 | 10px, 12px, 14px, 15px, 16px, 17px, 18px, 30px, 42px | 1, 1.1, 1.2, 1.3, 1.4, 1.5 | mainFont — detected in extracted data but not described by AI |
| Custom Font | Inter, Arial, sans-serif |  |  |  | The primary typeface for all text elements. The range of weights and sizes supports a clear typographic hierarchy, from detailed captions to prominent headings. Consistent letter-spacing across the board provides a uniform and refined feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body | 14 | 1.5 |  |
| body-lg | 16 | 1.5 |  |
| subheading | 18 | 1.4 |  |
| heading | 30 | 1.2 |  |
| display | 42 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "100px",
    "cards": "4px",
    "images": "4px",
    "buttons": "1497.6px",
    "navigation": "1400px"
  },
  "elementGap": "8px",
  "sectionGap": "60px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Calls to action, emphasized links.

Background: Obsidian (#0a0a0a), Text: Canvas (#ffffff), Border: Obsidian (#0a0a0a), Radius: 1497.6px (effectively pill-shaped). Padding: 9.7344px vertical, 16.4736px horizontal.

### Ghost Navigation Link

**Role:** Navigation items, secondary actions within dark sections.

Background: Transparent, Text: Canvas (#ffffff), Border: Canvas (#ffffff) 1px, Radius: 0px. No padding, designed for inline text.

### Ghost Accent Button

**Role:** Secondary actions, subtle interactive elements on textured backgrounds.

Background: rgba(255, 255, 255, 0.25), Text: Canvas (#ffffff), Border: Canvas (#ffffff), Radius: 100px. Padding: 4px vertical, 14px horizontal.

### Text Only Button (Dark)

**Role:** Subtle actions or links within light sections.

Background: Transparent, Text: Obsidian (#0a0a0a), Border: rgba(10, 10, 10, 0.15), Radius: 1497.6px (pill-shaped). Padding: 9.7344px vertical, 16.4736px horizontal.

### Content Card

**Role:** Grouping related content or feature highlights.

Background: Canvas (#ffffff), Border: none, Radius: 4px. Padding around content is 14px.

## Do's

- Use Obsidian (#0a0a0a) for primary text and interactions, ensuring AAA contrast against light backgrounds.
- Apply Canvas (#ffffff) for all main page and card backgrounds to maintain a bright, expansive canvas.
- Implement a 1497.6px border-radius for all primary action buttons, rendering them as distinct pill shapes.
- Introduce Mist (#ebebeb) as a background for secondary content blocks to create subtle visual breaking points.
- Prioritize the Custom Font at weight 400 for body text, ensuring legibility with a line-height of 1.5.
- Use 0.0600em letter-spacing consistently across all text to maintain a refined, airy feel.
- Employ the Soft Jade Wash gradient for hero sections or atmospheric backgrounds to introduce subtle, ethereal color.

## Don'ts

- Avoid arbitrary uses of color; reserve saturated hues for specific brand-aligned visual moments like the Soft Jade Wash.
- Do not deviate from the established pill and 4px radii; circularity and soft corners are key brand identifiers.
- Never use heavy shadows or gradients on interactive elements beyond what's specified, as the system favors lightness.
- Refrain from tight spacing; maintain a comfortable element gap of 8px and generous section gaps of 60px.
- Do not introduce additional font families or weights outside of the 'Custom Font' weights 300-600.
- Avoid bolding words unnecessarily; visual hierarchy is primarily managed through size and a restrained palette of weights.
- Do not use highly saturated color for text; stick to Obsidian (#0a0a0a) and Faded Steel (#858585) for optimal contrast on white/light backgrounds.

## Layout

The page adheres to a max-width contained layout, though the exact width is not explicitly defined, it maintains generous horizontal padding. The hero section often features a soft, background gradient (Soft Jade Wash) with centered headlines and minimal navigation hints. Section rhythm is managed through alternating background colors, primarily Canvas (#ffffff) and Mist (#ebebeb), with consistent vertical spacing provided by a 60px section gap. Content arrangement frequently uses a centered stack, and for showcasing work, a multi-column card-like grid with images and text overlays. Navigation is a sticky top bar with minimal links.

## Imagery

The site predominantly uses product screenshots or minimal abstract graphics, often presented without heavy adornment. Imagery is contained, rather than full-bleed, usually with either sharp 0px or soft 4px border radii, fitting neatly into the UI. There's a notable absence of lifestyle photography. Icons, when present, are simple, outlined, and monochrome, integrating seamlessly with the clean aesthetic. Imagery serves primarily to showcase client work or provide clear functional cues rather than creating atmospheric decoration.

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Shares a clean, minimalist aesthetic with high contrast text, sharp lines, and a focus on spacious layout. |
| Linear | Features a strong monochrome palette, subtle background shifts for section separation, and compact, precise typography. |
| Stripe | Employs an expansive white canvas, clear information hierarchy through type, and subtle use of color for highlights rather than broad swaths. |
| Vercel | Utilizes a clean, high-contrast, often monochrome interface with a focus on geometric purity and clear visual hierarchy. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a0a0a
background: #ffffff
border: #dbd9dc
accent: no distinct accent color
primary action: #0a0a0a (filled action)

Example Component Prompts:
1. Create a primary action button: Background #0a0a0a, text #ffffff, radius 1497.6px, padding 9.7344px vertical, 16.4736px horizontal.
2. Design a navigation link on a dark background: Background transparent, text #ffffff, 1px border #ffffff, radius 0px.
3. Implement a secondary action button with a frosted appearance: Background rgba(255, 255, 255, 0.25), text #ffffff, border #ffffff, radius 100px, padding 4px vertical, 14px horizontal.
4. Build a content card: Background #ffffff, radius 4px, internal padding of 14px surrounding content. Title text #0a0a0a at Custom Font 18px, weight 500. Body text #0a0a0a at Custom Font 14px, weight 400, line-height 1.5.
5. Create a section header: Text #0a0a0a at Custom Font 30px, weight 600, line-height 1.2, section gap above/below 60px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516253907-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516253907-thumb.jpg |
