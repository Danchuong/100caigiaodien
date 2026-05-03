# Ryan Stephen — Refero Style

- Refero URL: https://styles.refero.design/style/4080f6e4-e61c-4d3c-ab93-de74a1b5dfc2
- Site URL: https://www.ryanstephen.co
- ID: 4080f6e4-e61c-4d3c-ab93-de74a1b5dfc2
- Theme: light
- Industry: design
- Created: 2026-04-30T02:57:02.443Z
- Ranks: newest: 263, popular: 1219, trending: 1219

> Gallery Grid on White Canvas

## Description

Ryan Stephen's design system evokes a clean, gallery-like presentation with a strong emphasis on content and minimal UI distraction. It utilizes a spacious, high-contrast monochrome palette to make imagery pop, ensuring the focus remains on the product designs showcased. Typography is understated and functional, blending into the background to support the visual work. Components are highly softened with generous corner radii, creating a friendly, approachable feel for an otherwise stark layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary content areas |
| Ink Black | #000000 | neutral | Primary text, strong borders, foundational UI elements that demand high contrast |
| Graphite Text | #404040 | neutral | Body text, secondary headings, providing a softer alternative to Ink Black without sacrificing readability |
| Ash Gray | #8b8b94 | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | Arial, Helvetica, 'sans-serif' | 400 | 12px | 1.20 | Descriptive labels, image captions, and detailed footer text, serving as the small-print element of the system. |
| system-ui | Segoe UI, Roboto, Ubuntu, Cantarell, 'Noto Sans', sans-serif | 500 | 16px | 1.20 | Primary body text, link text, and short descriptions, offering clarity and a slightly robust presence in the UI. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body | 16 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "images": "10px",
    "components": "10px"
  },
  "elementGap": "20px",
  "sectionGap": "100px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Profile Description Block

**Role:** Informational text block

A focused text block for personal or project descriptions. Text uses Graphite Text (#404040) at 16px/500 weight, with links using Ash Gray (#8b8b94) at the same size and weight. Contains no explicit padding but is isolated by surrounding spaces.

### Image Gallery Grid Item

**Role:** Displaying visual work

Individual square image containers within a grid layout. Each image has a 10px border-radius, giving it a soft, rounded appearance. Content within the grid item is an image, bordered implicitly by the grid spacing using a 15px gap (row and column).

### Interactive Link

**Role:** Navigational or actionable text

Text links rendered in Ash Gray (#8b8b94) at 16px/500 weight, primarily for secondary actions or related content. There is no explicit hover or active state specified in the data, implying a subtle interaction or reliance on browser defaults.

## Do's

- Prioritize Canvas White (#ffffff) for all large background areas to maintain a spacious, gallery-like feel.
- Use Ink Black (#000000) strictly for primary headings and critical UI elements where maximum contrast is essential, like primary text.
- Apply a consistent 10px border-radius to all image containers and card-like components to ensure a cohesive, softened aesthetic.
- Maintain a visual hierarchy where body text uses Graphite Text (#404040) for readability and softer links use Ash Gray (#8b8b94).
- Structure layouts with a generous 100px section gap for clear delineation between major content blocks, creating an airy feel.
- Employ a base element gap of 20px for consistent spacing between distinct UI components.
- Utilize 15px spacing for items within image grids or compact lists to keep related content visually grouped but distinct.

## Don'ts

- Do not introduce strong, saturated colors unless they are part of the image content itself; the UI must remain monochrome.
- Avoid sharp corners or square edges on any interactive or content card-like element; always adhere to the 10px radius.
- Do not deviate from the specified typography hierarchy; avoid using 12px for body content or 16px for captions.
- Do not overcrowd sections; preserve the spacious feel by respecting the 100px section gap.
- Avoid heavy borders or strong shadows; the design relies on stark white space and soft radii for definition.
- Do not use generic system font weights other than 400 or 500; the UI's subtle nature depends on these choices.
- Do not use bright or animated hover states for links; interactions should be understated or rely on browser defaults.

## Imagery

The site's imagery consists solely of product screenshots, often depicting hands interacting with phone-based interfaces. The treatment is primarily isolated shots, with little environmental context, putting the product UI itself at the forefront. There's an absence of photography or graphic illustrations, emphasizing actual design output. The role of imagery is demonstrative and portfolio-oriented, serving as the core content rather than decorative elements. The density is image-heavy, forming a dense, uniform grid that dominates the page.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Grid-based presentation of visual content, emphasizing individual work pieces in a clean, minimalist layout with high contrast text. |
| Read.cv | Focus on personal portfolios with high-contrast text and a clean, spacious canvas for work examples, often image-heavy. |
| Bēhance | Portfolio site with a strong emphasis on image grids for showcasing design projects, minimal UI to let the work speak. |
| Figma's community pages | Often uses light backgrounds and structured grids to present files or community content, with a similar understated typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #8b8b94
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a profile introduction: 16px system-ui weight 500, #404040 for body text; links in #8b8b94, 16px system-ui weight 500. Wrap the content in 40px padding.
Create an image grid item: A square container for an image, with a 10px border-radius. Internally, the image fills the container. Grid items should be separated by 15px elementGap.
Create a ghost link: Text 'Link Text' in #8b8b94, 16px system-ui weight 500. This link is for secondary actions.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517799609-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517799609-thumb.jpg |
