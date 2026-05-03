# Svelte — Refero Style

- Refero URL: https://styles.refero.design/style/303ca7ea-e6fa-4e95-8acb-8008c4d3c068
- Site URL: https://svelte.dev
- ID: 303ca7ea-e6fa-4e95-8acb-8008c4d3c068
- Theme: light
- Industry: devtools
- Created: 2026-01-26T12:44:50.000Z
- Ranks: newest: 1269, popular: 160, trending: 128

> Crisp editorial elegance

## Description

This design system feels like a modern reinterpretation of classic editorial design, balancing gravitas with approachability. The signature move is the pairing of a strong, almost-black headline color (#141414) with an elegant serif font (EB Garamond / DM Serif Display) that commands attention without being overbearing. This is underscored by a clean, spacious layout using ample negative space to highlight key content, with the single vibrant orange (#d43008) serving as a bright, technical accent, reminiscent of a warning light or a 'hot' element in a cool system.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon | #141414 | neutral | Primary heading text, commanding a strong presence on light backgrounds. |
| Graphite | #262626 | neutral | General body text, default button text, navigation items – providing high contrast without the harshness of pure black. |
| Pewter | #666666 | neutral | Subtle text for secondary information, less prominent links, providing hierarchy by reduced contrast. |
| Ghost White | #f2f2f2 | neutral | Subtle background for UI elements like search bars and buttons, creating soft divisions. |
| Snow | #ffffff | neutral | Page backgrounds and primary interactive elements, ensuring a bright, expansive canvas. |
| Svelte Orange | #d43008 | brand | Interactive elements, links, and icons – a vivid accent that guides user attention and signifies action. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| DM Serif Display | DM Serif Display | 500 | 54px | 1.20 | Display headlines; used for prominent hero sections, this 54px text with its precise weight feels like a modern masthead, delivering authority and sophistication. |
| EB Garamond | EB Garamond | 400 | 10px, 22px | 1.50 | Body text for long-form content and some secondary headings. The 22px size for large body blocks combines academic elegance with modern web readability. |
| Fira Sans | Fira Sans | 400 | 10px, 12px, 13px, 14px, 16px, 20px | 1.00, 1.20, 1.50, 1.70 | UI elements, navigation, and supplementary information. The wider range of sizes from 10px to 20px makes it versatile for system-level text, offering practical clarity against the more decorative serifs. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "4px",
    "navItem": "4px"
  },
  "elementGap": "10px",
  "sectionGap": "100px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### GET STARTED CTA Button



### Search Bar with Keyboard Shortcut



### Companies Social Proof Block



### Primary Navigation Link

**Role:** Main navigation item

Text in Graphite (#262626) using Fira Sans Regular, with padding of 0px overall. Interacts with a sublte border color on hover or focus.

### Default Button

**Role:** General interactive button

Background transparent (rgba(0,0,0,0)), text in Graphite (#262626). Border is implicit from surrounding context rather than explicit, with a 4px radius.

### Minimal Card Button

**Role:** Button within a card-like element

Background Snow (#ffffff), text Graphite (#262626), with a border-top-color of Graphite (#262626) and 0px radius. Padding is 0px top/bottom, 10px left/right.

### Inline Text Link

**Role:** Hyperlinks in body copy

Text in Svelte Orange (#d43008), with no additional styling until hover/focus, where it will likely gain more emphasis.

## Do's

- Prioritize DM Serif Display 500 for all top-level headlines at 54px size, using Carbon (#141414) for maximum impact.
- Use EB Garamond 400 at 22px for primary body text, paired with a line-height of 1.5 to enhance readability.
- Apply Svelte Orange (#d43008) exclusively for interactive elements, links, and critical accent icons to draw attention to actionable items.
- Maintain a default border-radius of 4px for all buttons and structural containers unless a specific style guide says otherwise.
- Ensure sufficient negative space around major content blocks, with section gaps typically around 100px vertical spacing.
- Keep text colors to Carbon (#141414), Graphite (#262626), and Pewter (#666666) against white or near-white backgrounds for clear visual hierarchy.

## Don'ts

- Do not use generic system fonts; EB Garamond, Fira Sans, and DM Serif Display are integral to the brand's typographic identity.
- Avoid excessive use of shadows or busy backgrounds; the design relies on crisp edges and generous white space.
- Do not replace Svelte Orange (#d43008) with other chromatic colors or use it for purely decorative purposes; it's reserved for interaction and emphasis.
- Do not vary border radii arbitrarily; stick to 4px for most elements to maintain visual consistency, with exceptions like the 56px radius for specialized components.
- Do not use pure black (#000000) for body text; instead, opt for Graphite (#262626) or Carbon (#141414) for a softer but still high-contrast look.
- Avoid using a pageMaxWidth; the layout appears to be full-bleed with content centered within flexible containers, allowing for adaptive responsiveness.

## Layout

The page follows a full-bleed pattern with content centrally aligned within implied maximum width containers. The hero section is full-width, featuring a prominent, centered headline over a background that combines a soft gradient with the distinctive 3D render. Subsequent sections alternate between centered single-column text blocks and a combination of text and product screenshots, often in a responsive, two-column arrangement. Vertical spacing between sections is generous (100px) creating a spacious rhythm. Navigation is a sticky top bar, providing persistent access to key links.

## Imagery

The visual language mixes functional, abstract 3D product renders with classic product screenshots. The hero features a complex 3D rendering of the 'Svelte' logo integrated into an industrial conveyor belt, symbolizing processing and transformation, rendered with a metallic sheen and an orange glow suggesting activity. This is contrasted with crisp, raw product screenshots of IDEs and code, often presented as contained, sharp-edged rectangles, demonstrating the UI framework in action. Iconography (e.g., search, social media) is minimalist line art, mostly in monochrome black. The overall density of imagery is moderate, used strategically for impact rather than decoration, with product visuals focused on explanatory content.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Clean, spacious light theme with strong typography and a focus on developer tools and efficiency, using subtle accents. |
| Next.js | Combines a powerful, modern serif for headlines with a clean sans-serif for UI elements, against a predominantly white canvas. |
| Stripe | High-contrast text on light backgrounds, strong emphasis on typography, and strategic use of a single, vibrant accent color for interactive elements. |
| Tailwind CSS | Focus on clarity and developer experience, featuring a minimalist aesthetic with clear content separation and purposeful typography pairings. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #262626 (Graphite)
- Headlines: #141414 (Carbon)
- Background: #FFFFFF (Snow)
- CTA/Accent: #d43008 (Svelte Orange)
- UI Elements Background: #f2f2f2 (Ghost White)

### Example Component Prompts
1. Create a hero section: Snow (#ffffff) background. Headline 'web development for the rest of us' at 54px DM Serif Display 500, Carbon (#141414). Below that, a 'Get Started' link in EB Garamond 400, 22px, Graphite (#262626), with a right arrow icon in Svelte Orange (#d43008).
2. Design a navigation bar link: 'Docs' text in Fira Sans 400, Graphite (#262626), with no specific background color. Add 0px padding all around. The link receives subtle border treatment on hover.
3. Develop a body text block: Paragraphs in EB Garamond 400, 22px, Graphite (#262626), line-height 1.5. Within the paragraph, an inline link 'Marcel Cutts' in Svelte Orange (#d43008).
4. Generate a search input field: Transparent background, #000000 text, 0px border radius, placeholder text in Pewter (#666666) Fira Sans 400. Placeholder text 'search' at 14px.
5. Implement a secondary button: Background Snow (#ffffff), text Graphite (#262626) in Fira Sans 400. Top border is Graphite (#262626), 0px radius. Padding 0px top/bottom, 10px left/right.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923430941-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923430941-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/303ca7ea-e6fa-4e95-8acb-8008c4d3c068-1777582507750-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/303ca7ea-e6fa-4e95-8acb-8008c4d3c068-1777582507750-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/303ca7ea-e6fa-4e95-8acb-8008c4d3c068-1777582507750-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/303ca7ea-e6fa-4e95-8acb-8008c4d3c068-1777582507750-preview-detail-poster.jpg |
