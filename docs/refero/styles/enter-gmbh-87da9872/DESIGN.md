# Enter GmbH — Refero Style

- Refero URL: https://styles.refero.design/style/87da9872-f6cc-4354-bf6a-1c02f0394d45
- Site URL: https://enter-support.de
- ID: 87da9872-f6cc-4354-bf6a-1c02f0394d45
- Theme: light
- Industry: other
- Created: 2026-04-30T03:45:50.501Z
- Ranks: newest: 74, popular: 697, trending: 520

> High-contrast functional block

## Description

Enter GmbH presents a bold, utilitarian aesthetic marked by high-contrast typography and a distinct lack of decorative elements. The visual system operates on contrasting surfaces of muted and vibrant hues, with a focus on clear, unembellished communication. Components are straightforward, featuring strong outlines and full-block backgrounds, reinforcing a sense of directness and functional clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ocean Mist | #a5d3d4 | neutral | Primary page background — a cool, muted base that allows energetic accents to pop |
| Warm Canvas | #f9f8ea | neutral | Secondary surface background, providing subtle warmth for content sections |
| Pure White | #ffffff | neutral | Foreground elements and text for maximum contrast on darker surfaces |
| Charcoal Black | #000000 | neutral | Primary text, borders, and icons — the dominant dark color providing strong contrast |
| Graphite | #282828 | neutral | Button backgrounds and footer background — a slightly softer dark for layered elements |
| Muted Stone | #6a6a6a | neutral | Hairline borders and subtle dividers |
| Flame Orange | #ff5000 | brand | Decorative highlights, impactful section backgrounds, and a key brand accent color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica | Arial | 400, 700 | 10px | 1.15 | System font for utility text, navigation items, and small labels, leveraging built-in readability for functional roles. |
| Maax Mono | Space Mono | 400 | 16px | 1.50, 1.60 | Primary body and descriptive text, chosen for a technical, precise, and understated corporate voice. |
| Sofia-Regular | Work Sans | 400 | 28px | 1.29, 1.36 | Distinctive headlines and section titles, providing a touch of stylized uniqueness while maintaining legibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.15 |  |
| body | 16 | 1.5 |  |
| heading | 28 | 1.29 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "25px",
    "buttons": "25px"
  },
  "elementGap": "24px",
  "sectionGap": "24px",
  "cardPadding": "13px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Interactive element for key user actions.

Solid Graphite (#282828) background with Pure White (#ffffff) text. Features a 25px border-radius, creating a pill-like shape. Padding is 13px vertically and dynamically 13-25px horizontally. Text uses Helvetica 10px weight 400.

### Navigation Link

**Role:** Top-level navigation items.

Inline text in Helvetica 10px weight 400. In an active state, it may have a 1px solid Charcoal Black (#000000) border-bottom or hover interaction.

### Decorative Text Link

**Role:** Subtle links within body content or lists.

Appears as Maax Mono 16px text with an implicit hover effect, indicated by a visual arrow or border on interaction. Uses Charcoal Black (#000000) text.

### News Banner

**Role:** Informational banner at the top of the page.

Uses a white background (#ffffff) with black text (#000000). Text in Helvetica 10px weight 400.

## Do's

- Always use Charcoal Black (#000000) for primary text on light backgrounds for maximum contrast.
- Apply 25px border-radius to all interactive buttons and prominent links.
- Use Maax Mono at 16px with 1.5 line height for all extended body copy.
- Employ Flame Orange (#ff5000) sparingly for high-impact section backgrounds or decorative accents to draw attention.
- Maintain a comfortable density with element gaps typically at 24px and card padding at 13px.
- Contrast bold, solid Graphite (#282828) buttons with Pure White (#ffffff) text.
- Leverage the cool Ocean Mist (#a5d3d4) or warm Warm Canvas (#f9f8ea) for distinct full-width section backgrounds.

## Don'ts

- Do not introduce gradients or soft shadows; the design relies on flat, high-contrast elements.
- Avoid using more than two distinct font families on a single page, adhering to Helvetica, Maax Mono, and Sofia-Regular.
- Do not use subtle color variations for interactive states; rely on direct changes in background, border, or text color.
- Do not use descriptive words like 'click here' – always make the link target clear.
- Refrain from using thin fonts or light greys for critical information, as legibility is prioritized through high contrast.
- Do not mix border radii values; consistently apply 25px for interactive elements and none for block content.
- Avoid excessive imagery; the visual identity is driven by bold color blocks and typography.

## Layout

The page maintains a contained maximum width for text content, but sections frequently employ full-bleed background colors for visual impact. The hero section uses a full-bleed Ocean Mist background with abstract illustrations, centered body text, and a distinct link below. Section rhythm alternates between muted (Ocean Mist, Warm Canvas) and vibrant (Flame Orange) full-width color blocks. Content arrangement is primarily centered stacks of text, with some two-column text and link patterns. Navigation is a minimalist sticky top bar with a 'Support' button and a 'plus' icon acting as a menu toggle.

## Imagery

The visual language predominantly features abstract, geometric illustrations with a stark, blocky style. These are typically simple shapes in Charcoal Black, Flame Orange, and Pure White, serving as decorative atmosphere rather than content explanation. Imagery serves a bold, graphic purpose, providing visual anchors in an otherwise text-dominant layout. There is a minimal use of icons, which are outlined and in Charcoal Black.

## Similar Brands

| Business | Why |
| --- | --- |
| Basecamp | Shares a utilitarian, no-frills aesthetic with strong typography and solid color blocks, prioritizing function over elaborate design. |
| HEY.com | Features a direct, unembellished approach to UI, contrasting vibrant accents against neutral backgrounds and using custom, distinct typography. |
| 37signals | Similar focus on robust, functional design, clear hierarchy through high-contrast text, and a limited, impactful color palette. |
| Stripe (early versions) | Exhibited a clean, geometric visual style with strong typography and minimal decorative elements, using color strategically for emphasis. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #a5d3d4
border: #000000
accent: #ff5000
primary action: #282828 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: Graphite (#282828) background, Pure White (#ffffff) text, Helvetica 10px weight 400, 25px radius, 13px 13px padding.
2. Create a Headline: Sofia-Regular 28px weight 400, Charcoal Black (#000000) text.
3. Create a Body Text Block: Maax Mono 16px weight 400, Charcoal Black (#000000) text, 1.5 line height.
4. Design a Section Divider: Use a 1px solid Muted Stone (#6a6a6a) horizontal line.
5. Build a Footer Background: Solid Graphite (#282828) background with Pure White (#ffffff) text in Helvetica 10px weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520733758-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520733758-thumb.jpg |
