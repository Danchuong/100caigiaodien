# Cassette — Refero Style

- Refero URL: https://styles.refero.design/style/fb4cfe58-00b5-4e6a-b251-0c65e60b6649
- Site URL: https://cassettemusic.com
- ID: fb4cfe58-00b5-4e6a-b251-0c65e60b6649
- Theme: dark
- Industry: media
- Created: 2026-04-30T00:25:16.970Z
- Ranks: newest: 807, popular: 617, trending: 422

> Granular sonic texture

## Description

Cassette employs a retro-futuristic, bold aesthetic centered on high-contrast black and yellow. Textures are a key visual element, with a CRT-like grain applied to background surfaces. Typography is compact and functional, balancing a monospaced font for details with a humanist sans-serif for impact. Components are lightweight with distinctive extreme corner rounding, contrasting with the sharp, graphic angles of the overall layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Oil | #19181a | neutral | Primary surface background, text on brand yellow accents. Black with a subtle warmth for depth |
| Cassette Yellow | #f0e226 | brand | Brand accent, active states, button fills, primary text on dark backgrounds. A vivid, almost neon yellow that defines the brand's energetic feel |
| Ghostly Gray | #d9d7ce | neutral | Subtle text, secondary border outlines, muted links. A desaturated light gray |
| True Black | #000000 | neutral | Primary text on light backgrounds, strong borders, graphic elements. Pure black for maximum contrast |
| Paper White | #f5f4f0 | neutral | Component backgrounds, badge fills, text on dark backgrounds. An off-white resembling aged paper |
| Subtle Line | #272727 | neutral | Hairline separators, subtle borders on dark surfaces |
| Pop Pink | #fac4f0 | accent | Decorative block background, illustration accent. A vibrant, moderate pink |
| Tangelo Dream | #ff8461 | accent | Decorative block background, illustration accent. A vivid orange |
| Sky Blue | #2896f3 | accent | Decorative block background, illustration accent. A vivid blue |
| Evergreen | #0db55b | accent | Decorative block background, illustration accent. A vivid green |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Apercu Pro | system-ui | 400 | 15px, 37px, 56px, 60px | 1.08, 1.20 | Major headings and key marketing statements. The standard sans serif for primary expression. |
| Apercu Mono Pro | Menlo, Monaco, 'Courier New', monospace | 400 | 13px, 14px | 1.00, 1.16, 1.30 | Body text, metadata, labels, and all detailed information. Its monospaced nature contributes to the structured, technical feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 15 | 1.2 |  |
| body-sm | 37 | 1.2 |  |
| body | 56 | 1.2 |  |
| body-lg | 60 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "other": "900px",
    "buttons": "900px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "13px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call to action

Boldly rounded button with Cassette Yellow fill and Midnight Oil text. Padding is 10px vertically and 13px horizontally. Radius 900px.

### Ghost Button

**Role:** Secondary call to action, navigation items

Outline button with Cassette Yellow text and a 1px Cassette Yellow border on a transparent background. Padding is 10px vertically and 13px horizontally. Radius 900px.

### Info Badge

**Role:** Informational labels, status indicators

Paper White background with True Black text. Square 0px radius. Padding 4px vertically and 4.8px horizontally.

### Outline Badge

**Role:** Subtle categories or labels

Transparent background with Midnight Oil text. Square 0px radius. Often used as a heading for client lists. Top padding 24px, no horizontal padding.

## Do's

- Use Midnight Oil (#19181a) as the primary background for content areas.
- Apply a 900px border radius to all interactive elements like buttons and any card-like groupings.
- Utilize Cassette Yellow (#f0e226) for all primary calls to action, highlights, and functional icons.
- Set all body text and detailed information in Apercu Mono Pro at 13px or 14px, weight 400 for a consistent technical feel.
- Employ True Black (#000000) for primary text on light backgrounds and for high-contrast borders.
- Maintain an element gap of 8px for tight groupings and apply 13px for internal card padding.
- Use Paper White (#f5f4f0) for component backgrounds and badges that require a lighter surface.

## Don'ts

- Avoid generic rectangular shapes; always use the extreme 900px border radius for interactive and contained elements.
- Do not introduce additional sans-serif fonts beyond Apercu Pro or mono fonts beyond Apercu Mono Pro.
- Never use Cassette Yellow (#f0e226) for non-interactive text or mere decoration; reserve its impact for active states and brand accents.
- Avoid soft, ambiguous color palettes; maintain the stark contrast between Midnight Oil/True Black and Cassette Yellow.
- Do not use subtle shadows for elevation; rely on strong color blocking and outline borders instead.
- Do not deviate from the grain texture on backgrounds; it's a signature visual element.
- Avoid decorative elements that feel 'modern' or 'clean'; embrace purposeful retro-futuristic graphics and sharp angles.

## Layout

The page primarily uses a full-bleed dark background with content centered vertically and horizontally. The hero section features a large, centered headline over the textured dark background, with navigation elements positioned at the top. Sections exhibit consistent vertical spacing, often breaking into alternating full-width blocks or multi-column layouts. A prominent grid is used for client logos (4-column). Text and image content often form L-shaped or Z-shaped arrangements rather than strict symmetrical columns, creating dynamic visual flow. Navigation is a simple top bar with distinct button-like links, sometimes accompanied by a dynamic, 'rotating' graphic.

## Imagery

This site features a mix of abstract and product imagery with a distinct texture overlay. Photography includes tight crops of cassette tapes and hands, often against vibrant, contrasting backgrounds. Illustrations are geometric and outlined, sometimes with a distressed or grainy effect, using the brand's accent colors as fillers. Iconography is primarily outlined, featuring an asterisk-like brand mark with a medium stroke weight. Imagery serves both decorative atmosphere and explicit product showcase, with a medium density, balancing text-heavy sections with bold visual statements.

## Similar Brands

| Business | Why |
| --- | --- |
| Offf Festival | Shares a gritty, high-contrast aesthetic with bold typography and a limited, punchy color palette. |
| Future Publishing | Utilizes a similar retro-graphic style with textured backgrounds and strong color blocking. |
| Adult Swim | Employs striking black backgrounds, neon accents, and a distinct, consistent typographic voice. |
| Superdeluxe | Known for its use of unconventional layouts, bold color splashes, and a distinctive, often playful, visual identity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000 (on light), #f5f4f0 (on dark)
- background: #19181a
- border: #000000 (strong), #f0e226 (accent)
- accent: #f0e226
- primary action: #f0e226 (filled action)

Example Component Prompts:
- Create a Primary Action Button: #f0e226 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create a ghost button labeled 'LEARN MORE' on the dark background.
- Create an info badge that reads 'NEW'.
- Create a section divider: 1px solid Subtle Line (#272727) spanning the content width.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508690696-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508690696-thumb.jpg |
