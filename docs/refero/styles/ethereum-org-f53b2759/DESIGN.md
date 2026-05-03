# ethereum.org — Refero Style

- Refero URL: https://styles.refero.design/style/f53b2759-5b4a-4509-9311-51ab74238326
- Site URL: https://ethereum.org
- ID: f53b2759-5b4a-4509-9311-51ab74238326
- Theme: light
- Industry: crypto
- Created: 2026-02-11T09:08:06.000Z
- Ranks: newest: 1203, popular: 588, trending: 801

> Abstract digital canvas, illuminated.

## Description

This design system feels like a tech conference where abstract ideas are made tangible. Its light theme and ample white space convey clarity and openness, while a spectrum of vibrant violet-to-pink gradients and sharp vector illustrations infuse it with a futuristic, playful energy. The interplay between strong, almost black headings and lighter grey body text, anchored by a prominent purple accent, creates a sophisticated yet dynamic informational aesthetic. Rounded corners on interactive elements provide a friendly counterpoint to predominantly straight lines in graphics.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud White | #ffffff | neutral | Page backgrounds, card surfaces, critical text on brand accents. |
| Graphite | #121212 | neutral | Primary text, prominent headings, strong UI elements. Provides high contrast against light backgrounds. |
| Ash Gray | #616161 | neutral | Secondary text, subtle labels, less prominent UI elements. |
| Silver Mist | #cfcfcf | neutral | Borders, dividers, subtle outlines. Establishes visual separation without strong contrast. |
| Ghost White | #f7f7f7 | neutral | Subtle background shifts for sections or hover states. |
| Lavender Bloom | #ece0ff | brand | Section backgrounds, informational panels. Provides a soft, branded backdrop. |
| Electric Violet | #6c24e0 | brand | Primary call-to-action buttons, interactive elements, significant links. The dominant brand accent, signaling action. |
| Fuchsia Burst | #f60e9d | accent | Secondary accent for links, icons, and supporting visuals. Adds vibrancy and a touch of playfulness. |
| Indigo Orb | #3d4ceb | accent | Tertiary accent for illustrative elements, links, and icons. Expands the vibrant, futuristic palette. |
| Emerald Spark | #0f9972 | accent | Contextual links and icon accents, adding a contrasting but harmonious hue. |
| Deep Violet | #41128c | brand | Text on dark backgrounds, subtle shading within illustrations, creating depth. |
| Violet Mist Gradient | #9357f4 | brand | Ambient background effects, creating a sense of ethereal space and depth. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 700, 900 | 10px, 14px, 16px, 18px, 20px, 24px, 30px, 35px, 36px, 48px, 60px, 64px | 1.00, 1.10, 1.20, 1.30, 1.40, 1.60, 2.00 | The primary typeface for all content - body text (400), bold emphasis (700), and striking headlines (900). Its clean, modern lines support readability across all sizes, from small labels to large display text. The weight 900 for display headlines provides significant visual impact. |
| IBM Plex Mono | Menlo, Consolas, monospace | 400 | 14px, 16px | 1.60 | Used for specialized UI elements like navigation items, denoting a technical or code-related context. Its monospaced nature subtly hints at the underlying technology focus. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.4 |  |
| body-sm | 14 | 1.4 |  |
| body | 16 | 1.4 |  |
| subheading | 18 | 1.4 |  |
| heading-sm | 20 | 1.4 |  |
| heading | 24 | 1.3 |  |
| heading-lg | 30 | 1.3 |  |
| display | 64 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "cards": "0px",
    "large": "32px",
    "links": "16px",
    "buttons": "8px",
    "default": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Popular Topics Cards



### Feature Section Card — Network Badge



### Ghost Button - Default

**Role:** Interactive element

A transparent button with Graphite text (#121212) and no border, 4px border-radius. Padding 8px vertical, 16px horizontal. Signifies a low-priority action or navigation.

### Ghost Button - Secondary

**Role:** Interactive element

A transparent button with Ash Gray text (#616161) and a Silver Mist border (#cfcfcf), 0px border-radius. Padding 0px. Used for subtle actions like secondary navigation or hidden functionality.

### Compact Action Button

**Role:** Call-to-action

A compact version of the primary button, with Electric Violet background (#6c24e0) and Cloud White text (#ffffff). Border radius 4px, padding 8px vertical, 16px horizontal. Used for inline or less prominent primary actions.

### Feature Card - Basic

**Role:** Content container

A card with no background color, no box-shadow, and 0px border-radius. It serves as a transparent container for content, relying on surrounding layout for definition.

### Pill Button

**Role:** Meta navigation / Tag

A button with 9999px border-radius, typically used for tagging or filter functions, giving a distinct soft shape.

## Do's

- Use Electric Violet (#6c24e0) exclusively for primary calls-to-action and active states to maintain visual hierarchy.
- Employ the Inter font at weight 900 for all display and large headings (48px, 60px, 64px) to convey authority and impact.
- Apply Lavender Bloom (#ece0ff) for background sections that need a branded, soft distinction from the main Cloud White canvas.
- Ensure generous padding, primarily 16px for content blocks and 32px for larger structural elements, to create an airy, spacious feel.
- Utilize 8px border-radius for primary buttons to give a modern, approachable feel, offsetting the sharper aesthetic of core UI elements.
- Implement the background radial gradient for hero sections or key interstitial blocks to introduce visual depth and brand mood.

## Don'ts

- Do not use multiple contrasting accent colors in a single area; prioritize Electric Violet, reserving Fuchsia Burst and Indigo Orb for secondary illustration details.
- Avoid box-shadow on cards that are meant to be simple content containers; maintain the flat aesthetic unless elevation is explicitly required by interaction.
- Refrain from using more than two distinct font families; Inter and IBM Plex Mono are sufficient for all content and UI needs.
- Do not vary paragraph text size excessively; stick to 16px for body and 14px for captions for consistent readability.
- Avoid applying tight letter-spacing; all text should maintain 'normal' letter-spacing except where specific display styles are defined by the type scale.

## Layout

The page primarily uses a max-width, centered content model, providing ample white space on either side. The hero section is a full-bleed illustrated graphic, setting an immersive tone. Subsequent sections alternate between the main centered content block and full-width background treatments (like Lavender Bloom). Content arrangement often features a single-column stack for headlines and lead paragraphs, transitioning to multi-column layouts for features or exploratory content, frequently with text on one side and an accompanying illustration on the other. Vertical spacing between sections is generous (typically 40px), creating clear visual breaks. Navigation is a sticky top bar, containing branding, main links, and utility actions like search and language selection, maintaining constant access.

## Imagery

The site uses a distinctive style of 'line-art' vector illustrations, often featuring pastel-colored fills and outlines in the brand's violet, pink, and indigo hues. These are not flat but have a subtle dimensionality and often include abstract geometric elements (like the Ethereum logo). They are frequently full-width or large hero elements, serving decorative, atmospheric, and explanatory roles without being strictly product screenshots. There's an absence of traditional photography, favoring a consistent, stylized graphic language. Icons are outlined, matching the illustration style, usually monochrome or employing brand accents. Density favors imagery, with large illustrations often dominating sections, establishing an immersive visual experience rather than a text-heavy one.

## Similar Brands

| Business | Why |
| --- | --- |
| Aave | Explores complex financial concepts through playful, detailed illustrations on a light, spacious UI. |
| Uniswap | Features a light theme with prominent purple branding and custom vector graphics to explain a technical product. |
| Arbitrum | Leverages a clean, light interface with strong brand color accents and abstract, stylized illustrations to represent blockchain technology. |
| Figma | Employs an illustrative, highly visual style on a light background, paired with strong typography for tech-oriented messaging. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Primary Text: #121212
- Background: #ffffff
- Call-to-Action: #6c24e0
- Border/Divider: #cfcfcf
- Secondary Text: #616161
- Section Background: #ece0ff

### 3-5 Example Component Prompts
1. Create a `Primary Action Button`: background #6c24e0, text #ffffff, border-radius 8px, padding 12px 32px. Text 'Learn More' in Inter weight 400, size 16px, line-height 1.4.
2. Design a `Feature Card`: no background, no shadow, border-radius 0px, padding 0px. Within it, a heading 'What is Ethereum?' in Inter weight 900, size 35px, color #121212, line-height 1.1, followed by body text 'Ethereum is a decentralized...' in Inter weight 400, size 16px, color #616161, line-height 1.4.
3. Implement a `Section Header`: a small label 'NETWORK' in Inter weight 700, size 14px, color #f60e9d, followed by a main heading 'What is Ethereum?' in Inter weight 900, size 48px, color #121212, line-height 1.2.
4. Generate a `Ghost Button - Secondary` for a navigation link: background rgba(0, 0, 0, 0), text #616161, border-bottom 1px solid #cfcfcf, border-radius 0px, padding 0px. The text should be 'Search ⌘ K' in IBM Plex Mono weight 400, size 16px, line-height 1.6.
5. Build a `Full-width Background Section`: background color #ece0ff, with content centered with 40px top/bottom padding. The content inside will use standard Graphite text on Cloud White backgrounds.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924294644-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924294644-thumb.jpg |
