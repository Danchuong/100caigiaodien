# Bun — Refero Style

- Refero URL: https://styles.refero.design/style/408a149c-702f-4442-99df-bea49d9c0d9b
- Site URL: https://bun.sh
- ID: 408a149c-702f-4442-99df-bea49d9c0d9b
- Theme: dark
- Industry: devtools
- Created: 2026-01-20T09:46:42.000Z
- Ranks: newest: 1299, popular: 110, trending: 101

> Synthwave dark lab – precision code illuminated by neon accents.

## Description

This design system conjures a high-tech laboratory vibe, a 'synthesized chaos' where sophisticated functionality meets playful, almost neon, branding. The dominant dark charcoal background creates a stark stage for bursts of vivid pinks and violets. Careful use of these vibrant chromatic accents for interactive elements and key messaging prevents visual fatigue, while subtle textural gradients and inner borders add depth to an otherwise flat dark aesthetic. The fusion of precise monospace code snippets with the broader system font reflects the dual nature of developer tools: serious, technical work presented with an engaging, almost futuristic flair.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Core | #0d0e11 | neutral | Page background, primary dark surface. |
| Obsidian Base | #14151a | neutral | Card backgrounds, section backgrounds, deeper surface level. |
| Charcoal Canvas | #282a36 | neutral | Component backgrounds, code blocks, secondary dark surfaces. |
| Slate Border | #3a3a3f | neutral | Subtle borders, dividers, subtle active states. |
| Graphite Accent | #3b3f4b | neutral | Accent borders, button outlines, subtle hover states. |
| Ash Text | #6b7280 | neutral | Secondary body text, disabled states. |
| Silver Text | #e5e7eb | neutral | Primary body text, labels, icons. |
| Polar White | #ffffff | neutral | High-contrast text, primary headers, active elements. |
| Cyber Pink | #f472b6 | brand | Primary brand accent, interactive elements (buttons, links), highlight text for 'fast', 'toolkit'. |
| Neon Violet | #a855f7 | brand | Secondary brand accent, highlight boxes, specific callouts. |
| Faded Rose | #fbcfe8 | brand | Subtle highlight text, often paired with Cyber Pink for larger headings. |
| Magenta Glow | #ec4899 | accent | Call-to-action button backgrounds, strong interactive elements. |
| Electric Cyan | #22d3ee | accent | Highlight text for specific data points or status indicators. |
| Virtual Violet | #c084fc | accent | Interactive text like tooltips or active filters. |
| System Green | #34d399 | semantic | Success states, positive indicators, checkmarks. |
| Warning Yellow | #fcd34d | semantic | Warning messages, caution indicators. |
| Danger Red | #f87171 | semantic | Error messages, destructive actions. |
| Gradient Pink Pulse | #ec4899 | brand | Decorative gradients creating a subtle pulse effect around key content, drawing attention without being overly aggressive. |
| Gradient Pink Fade | #f472b6 | brand | Background gradient for certain elevated sections, providing a soft transition from the Cyber Pink hue. |
| Gradient Sunset | #e67e22 | accent | Illustration accent, indicating energy or speed. |
| Gradient Cosmos | #b301b3 | accent | Illustration accent, adding depth and visual interest. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| system-ui | Inter | 300, 400, 500, 600, 700, 800 | 12px, 13px, 14px, 16px, 18px, 20px, 21px, 24px, 48px, 53px, 60px | 1.00, 1.20, 1.33, 1.40, 1.43, 1.50, 1.54, 1.56, 1.63, 1.78, 1.85 | Primary text font for all UI elements, body copy, headings, and navigation. Uses various weights and sizes to establish hierarchy, with weight 800 often used for bold declarations within headlines. |
| JetBrains Mono | Fira Code | 400, 500, 600, 700 | 12px, 13px, 14px, 16px, 18px, 19px | 1.11, 1.33, 1.43, 1.50, 1.51, 1.54, 1.60, 1.63 | Monospace font specifically for code snippets, command line inputs, and technical details, reinforcing the developer-centric nature of the product. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.43 |  |
| heading | 20 | 1.4 |  |
| heading-lg | 24 | 1.33 |  |
| display | 60 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "badge": "9999px",
    "input": "7px",
    "buttons": "8px",
    "default": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "128px",
  "cardPadding": "",
  "pageMaxWidth": "1280px"
}
```

## Components

### Install Command Line Input with OS Tabs



### Feature Cards — Four Tools One Toolkit



### API Pill Selector + Code Block



### Primary CTA Button

**Role:** Main call-to-action.

Background: Magenta Glow (#ec4899), Text: Polar White (#ffffff), Radius: 8px, Padding: 16px 36px (implies min-width).

### Ghost Navigation Button

**Role:** Secondary navigation or filter items.

Background: transparent (rgba(0,0,0,0)), Text: Silver Text (#d1d5db), Border: Charcoal Canvas (#282a36), Radius: 7px 7px 0px 0px, Padding: 16px.

### Text Accent Button

**Role:** Tertiary actions or category toggles.

Background: transparent (rgba(0,0,0,0)), Text: Polar White (#ffffff), Border: rgba(255, 255, 255, 0.16), Radius: 6px, Padding: 4px.

### Large Feature Card

**Role:** Prominent feature display.

Background: transparent (rgba(0,0,0,0)), Text: Polar White (#ffffff), Border: Graphite Accent (#3b3f4b), Radius: 5px, Padding: 32px.

### Command Line Input

**Role:** Code snippets for user interaction.

Background: Charcoal Canvas (#282a36), Text: Polar White (#ffffff), Border: Slate Border (#3a3a3f), Radius: 8px, Padding: 16px.

### Performance Bar Graph

**Role:** Visual representation of data.

Background: Obsidian Base (#14151a), individual bars use Cyber Pink (#f472b6) with a subtle shadow: rgba(0,0,0,0.25) 0px 25px 50px -12px, Text: Silver Text (#e5e7eb) for labels, Polar White (#ffffff) for values. Radius: 4px.

### Code Block

**Role:** Displaying source code.

Background: Charcoal Canvas (#282a36), Text: various syntax-highlighted colors (e.g., Faded Rose #fbcfe8 for keywords, Electric Cyan #22d3ee for types, Polar White #ffffff for general code), Font: JetBrains Mono. Radius: 8px, Padding: 16px.

### Highlight Badge (Replaces)

**Role:** Emphasizing replacements or comparisons.

Background: Cyber Pink (#f472b6) variants or Neon Violet (#a855f7) variants, Text: Polar White (#ffffff), Radius: 9999px (pill shape), Padding: 4px 8px.

## Do's

- Use Midnight Core (#0d0e11) as the base page background.
- Apply Charcoal Canvas (#282a36) for card surfaces and code blocks.
- Highlight primary calls-to-action with Magenta Glow (#ec4899) background and Polar White (#ffffff) text.
- Maintain high contrast text with Polar White (#ffffff) for headings and Silver Text (#e5e7eb) for body copy against dark backgrounds.
- Utilize 9999px radius for small interactive elements like tags and badges, creating a soft pill shape.
- Reserve JetBrains Mono for all code-related content, including command-line interfaces and code snippets.
- Use Cyber Pink (#f472b6) and Neon Violet (#a855f7) sparingly for key accents, interactive states, and important highlights.

## Don'ts

- Avoid using light backgrounds; the theme is exclusively dark, leveraging specific dark neutrals.
- Do not introduce strong shadows on most elements, as depth is primarily created through varying dark surface colors and subtle inner borders.
- Do not deviate from the system-ui for general text content; save JetBrains Mono for code only.
- Avoid overuse of chromatic colors; they are accents, not primary content colors.
- Do not use generic button styles; always apply the specified padding, border, and radius for each button variant.
- Avoid any radius value other than 4px, 8px, 12px, 30px, or 9999px, as these define the system's shape language.

## Layout

The layout is primarily a max-width 1280px centered content model, providing ample breathing room against the full-bleed dark background. The hero section features a centered headline over a dark background, flanked by call-to-action buttons. Subsequent sections typically alternate between centered text blocks and asymmetric compositions, often with text on one side and a visual (like a code block or graph) on the other. Vertical rhythm is established by section gaps, emphasizing content blocks. There are instances of 2-column and 3-column card grids for features, breaking the vertical flow. Navigation is a sticky top bar, minimal and focused, integrating a primary 'Build' CTA with links and Discord access. The overall density is balanced, prioritizing clarity and direct information presentation.

## Imagery

The visual language for imagery is primarily functional and illustrative, designed to complement the dark UI. Graphics are a mix of abstract shapes, data visualizations, and code snippets. Product imagery is absent; instead, performance graphs, command-line outputs, and code blocks serve as the primary visual content. Icons are monocolor, typically in Polar White or an accent color, following an outlined or filled style without complex gradients, used functionally (e.g., checkmarks, arrows). Sparse, vibrant, geometric 'bug' illustrations or abstract shapes (like stars or splashes of color) add a playful, almost animated energy, often acting as badges or highlights. Density is moderate, with visuals strategically placed to break up text-heavy sections or to illustrate technical concepts directly.

## Elevation

| Element | Style |
| --- | --- |
| Card/Container Shadow | rgba(0, 0, 0, 0.25) 0px 25px 50px -12px |
| Highlight Badge Shadow | rgba(131, 24, 67, 0.1) 0px 10px 15px -3px, rgba(131, 24, 67, 0.1) 0px 4px 6px -4px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Similar dark-mode aesthetic with strong emphasis on developer tools, high-contrast text, and subtle use of brand accents. |
| GitHub | Dark UI, code-centric design, and the use of monospace fonts for technical content. |
| linear.app | Structured dark interface with a focus on efficiency, subtle gradients, and high-quality typography for technical users. |
| Tailwind UI (dark themes) | Dark neutral palettes with distinct accent colors and component styling that prioritizes functionality and readability. |
| Stripe (developer docs) | Clear separation of code examples and explanatory text, a strong dark theme, and a professional, yet inviting, visual tone. |

## Custom Sections

### Agent Prompt Guide

1. **Quick Color Reference:**
   - Text (primary): #ffffff
   - Text (secondary): #e5e7eb
   - Background (page): #0d0e11
   - Background (card): #14151a
   - CTA: #ec4899
   - Border (subtle): #3a3a3f
   - Accent: #f472b6

2. **Example Component Prompts:**
   - Create a hero section: background Midnight Core (#0d0e11). Headline 'Bun is a fast JavaScript all-in-one toolkit' using system-ui, weight 800 for 'fast' and 'all-in-one toolkit' color Cyber Pink (#f472b6), size 60px, line-height 1.0. Body text Silver Text (#e5e7eb) at 16px, line-height 1.5. Include a Primary CTA Button labeled 'Try it'.
   - Generate a 'Bundling Performance' card: background Obsidian Base (#14151a), padding 16px. Title 'Bundling 10,000 React components' text Polar White (#ffffff), size 20px, weight 700. Inside, add a Performance Bar Graph with bars colored Cyber Pink (#f472b6) and labels Silver Text (#e5e7eb), code values Polar White (#ffffff).
   - Design a command line input: background Charcoal Canvas (#282a36), border Slate Border (#3a3a3f), radius 8px, padding 16px. Placeholder text 'bun ./index.ts' using JetBrains Mono, Silver Text (#e5e7eb), 16px. Place a Cyber Pink (#f472b6) highlight badge with 'REPLACES NPM' text to its right, using 9999px radius and 4px 8px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923049306-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923049306-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/408a149c-702f-4442-99df-bea49d9c0d9b-1777567430937-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/408a149c-702f-4442-99df-bea49d9c0d9b-1777567430937-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/408a149c-702f-4442-99df-bea49d9c0d9b-1777567430937-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/408a149c-702f-4442-99df-bea49d9c0d9b-1777567430937-preview-detail-poster.jpg |
