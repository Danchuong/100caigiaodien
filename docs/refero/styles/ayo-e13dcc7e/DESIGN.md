# Ayo — Refero Style

- Refero URL: https://styles.refero.design/style/e13dcc7e-27fa-46dd-a9a2-cee09c822793
- Site URL: https://www.joinlava.com
- ID: e13dcc7e-27fa-46dd-a9a2-cee09c822793
- Theme: dark
- Industry: media
- Created: 2026-04-30T02:24:32.510Z
- Ranks: newest: 377, popular: 634, trending: 470

> Midnight gradient glow

## Description

Lava's design system evokes a 'midnight command center behind frosted glass' aesthetic with its deeply saturated dark theme and vibrant, multi-hued gradients. Typography is bold and compact, contrasting against the dark surfaces, and often utilizes fine weights to convey a sophisticated tone. Components are sharp-edged yet rounded for a tactile feel, featuring prominent glow effects and a scarcity of true white, reserving it for core text elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Aura | #000000 | neutral | Page backgrounds, card backgrounds, deep shadows, primary button fill, text |
| Ash Slate | #1f2023 | neutral | Elevated card backgrounds, secondary surface |
| Carbon Gray | #333333 | neutral | Muted text, subtle borders, secondary text |
| Storm Gray | #383b40 | neutral | Link text, subtle borders |
| White Frost | #ffffff | neutral | Primary text, heading text, button text, active borders |
| Vivid Pink | #491363 | accent | Decorative accents, illustration elements, subtle glowing borders |
| Neon Green | #04fd8f | accent | Green outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Spectrum Gradient | #0072ff | brand | Blue wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue haas unica | Helvetica Neue | 300, 400, 700, 900 | 11px, 13px, 14px, 15px, 17px, 18px, 24px, 53px, 56px | 1.00, 1.05, 1.10, 1.20, 1.43, 1.50, 1.82 | Primary typeface for all interface elements including navigation, headings, body text, and buttons. Its wide range of weights, including light 300, contributes to the sophisticated yet compact feel. |
| Galada | Sacramento | 400 | 17px, 18px, 19px, 35px | 1.20, 1.50 | Decorative script font used for brand elements and occasional visual flair, offering a human touch against the structured primary typeface. Only seen as part of 'Lava' logo. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.43 | 0.286 |
| heading | 24 | 1.1 | 0.286 |
| heading-lg | 53 | 1.05 | 0.286 |
| display | 56 | 1 | 0.286 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "images": "15px",
    "buttons": "200px",
    "circularElements": "100px"
  },
  "elementGap": "5px",
  "sectionGap": "27px",
  "cardPadding": "37px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action button for initiating key user flows.

Filled with Midnight Aura, White Frost text, 200px border-radius. Padding 12px vertical, 40px horizontal.

### Standard Card

**Role:** Container for content sections, often featuring media.

Ash Slate background, 20px border-radius, with 37px padding on top, right, and left, and 44px on bottom. No shadow.

### Floating Card Shadowed

**Role:** Container for content, elevated with a pronounced shadow.

Transparent background, 20px border-radius, with a deep shadow: rgba(0, 0, 0, 0.5) 14px 14px 40px 0px or rgba(0, 0, 0, 0.6) 14px 14px 40px 0px.

### Compact Card

**Role:** Small content blocks, typically without explicit top/side padding.

Ash Slate background, 18px border-radius. No top/side padding, 56px bottom padding. No shadow.

### Header Navigation Item

**Role:** Interactive elements within the main navigation bar.

White Frost text with occasional Neon Green border. Uses Neue Haas Unica font at 14px with 0.2860em letter spacing.

## Do's

- Prioritize Midnight Aura (#000000) for all significant backgrounds and surface fills to maintain the dark theme.
- Use White Frost (#ffffff) exclusively for primary text and headings for maximum contrast against dark surfaces.
- Apply Spectrum Gradient (linear-gradient(45deg, #0072ff, #00d2e8 17%, #04fd8f 34%, #70fd6c 51%, #dae11 68%, #ff9346 85%, #ff62c6)) as a border for interactive elements and highlights to provide a signature brand cue.
- Maintain a 200px border-radius for all primary buttons to achieve a highly rounded, 'pill' shape.
- Utilize Neue Haas Unica with a 0.2860em letter spacing for most headings and substantial text blocks to enforce conciseness and character.
- Employ the 14px 14px 40px 0px shadow for cards that require significant visual elevation, with an opacity of 50-60%.
- Ensure generous padding on cards, specifically using 37px (top/right/left) and 44px (bottom) when content needs breathing room within the card.

## Don'ts

- Avoid using bright, full-saturation colors for large background areas; reserve them for accents, highlights, and gradients.
- Do not deviate from the predominantly dark theme; avoid light backgrounds except as direct content within media.
- Do not use generic square or slightly rounded corners for buttons; all buttons must use the 200px 'pill' radius.
- Refrain from using shadows on every element; reserve them only for cards needing explicit elevation in a dark environment.
- Do not use letter-spacing: normal for headlines where tight tracking is preferred; consistently apply the 0.2860em value for Neue Haas Unica where specified.
- Avoid using decorative fonts like Galada for body text or functional interface elements; it is reserved for specific brand elements.
- Do not introduce new border-radius values; stick to the established system of 20px for cards, 15px for images, and 200px for buttons.

## Layout

The page primarily uses a full-bleed black background but contains content within a responsive, likely max-width centered layout rather than edge-to-edge. The hero section is full-bleed black with a centered headline and circular hero imagery. Sections have a consistent vertical rhythm, with clear spacing between content blocks. Content arrangement often features centered stacks for headlines and calls to action, followed by multi-column grids (like the 3-column card grid for features). Navigation is a sticky top bar, minimally present with white icons against the full-bleed gradient. The layout manages to feel both spacious and information-dense, using the dark canvas to make content pop.

## Imagery

The visual language for imagery is characterized by tightly cropped, often circular or pill-shaped, photographs of diverse individuals or vibrant abstract graphics, which are typically contained within cards or act as focal points. Photography is dynamic and often involves high-contrast subjects. Product screenshots are contained within device outlines, which themselves often feature glowing gradient borders. Icons are minimal, outlined, or filled, and primarily monochrome or utilize the brand's accent colors. Imagery serves both decorative atmosphere and explicit product showcase, with a relatively high density of visual content that balances text-dominant sections.

## Elevation

| Element | Style |
| --- | --- |
| Floating Card | rgba(0, 0, 0, 0.5) 14px 14px 40px 0px |
| Floating Card (stronger) | rgba(0, 0, 0, 0.6) 14px 14px 40px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Clubhouse | Dark UI with a focus on social audio, similar use of person-centric imagery and stark contrast. |
| Spotify (Dark Mode) | Dominant dark theme, vibrant accent colors for interactive elements and brand recognition, and a clean typographic hierarchy. |
| Discord | Dark interface, use of accent colors to highlight interactive states, and compact information presentation. |
| Netflix | Dark theme with media previews in cards, making content pop against a deep background. Strong typographic hierarchy. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #333333
accent: #491363
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Standard Card: Ash Slate background, 20px border-radius, 37px padding on top, right, and left, 44px on bottom. Headline in White Frost, Neue Haas Unica weight 700 at 24px.
3. Create a Floating Card: No background, 20px border-radius, box-shadow rgba(0, 0, 0, 0.5) 14px 14px 40px 0px. Internal text in White Frost, Neue Haas Unica weight 400 at 14px.
4. Compose a Header Navigation Item: Text 'Lava' in White Frost, Neue Haas Unica weight 400 at 14px, 0.2860em letter spacing. Include a Spectrum Gradient border when active.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515847886-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515847886-thumb.jpg |
